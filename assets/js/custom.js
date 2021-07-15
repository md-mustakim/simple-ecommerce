/*
*   this page is made for product related validation
* */
$("#reset").click(()=>{
    $("#addProductForm").trigger("reset");

});

$("#save").click(()=>{
    $("#addProductForm").submit();
});

function cartList(){
    let cartList = window.localStorage.getItem('cart');
    console.log(cartList);
}

$(function (){
    //define base url
    let $baseUrl = $("#base_url").html();
    //show data list
    let showDataList = () => {
        $.ajax({
            url:  $baseUrl + "index.php/admin/categoryController",
            method: "GET",
            success: (data) =>{
                let response = $.parseJSON(data);
                if (response.status){
                    let $productListTable = $("#productListTable");
                    $productListTable.empty();
                    $productListTable.append("<th>" +
                        "<th>Category</th>" +
                        "<th>Name</th>" +
                        "<th>Details</th>" +
                        "<th>Price</th>" +
                        "</th>");

                    response.data.forEach((e)=>{
                        $productListTable.append("<tr>" +
                            "<td>"+ e.category +"</td>" +
                            "<td>"+ e.name +"</td>" +
                            "<td>"+ e.details +"</td>" +
                            "<td>"+ e.price +"</td>" +
                            "</tr>");
                    });
                }
            }
        });
    }

    showDataList();

    let $addForm = $("#addProductForm");
    $addForm.rules("add", {
        accept: "jpg|jpeg|png|ico|bmp"
    });
    $addForm.validate({
        rules: {
            category: {
                required: true
            },
            name: {
                required: true
            },
            details:{
                required: true
            },
            price: {
                required: true
            },
            image: {
                required: true
            }
        },
        messages:{
            name:{
                required: "Name is mandatory !!"
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url: $baseUrl + "index.php/admin/categoryController/store",
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(form),
                //data: $("#addProductForm").serialize(),
                success: (data)=>{
                    let response = $.parseJSON(data);
                    if (response.status === true){
                        Swal.fire(
                            'Product Added Successfully',
                            '',
                            'success'
                        );
                        $addForm.trigger("reset");
                        showDataList();
                    }else {
                        console.log(response)
                        Swal.fire(
                            'Product Added Failed',
                            response.message.error,
                            'error'
                        );
                    }
                }
            })
        }
    });

    // add to card ------------------------------------------------------------------------------------------------

    $("#addToCardId").click(() => {

        let statusOfStorage = window.localStorage.getItem('cart');
        if(statusOfStorage === null)
        {
            let item = [
                {
                    id: $("#p_id").val(),
                    name: $("#p_name").val(),
                    image: $("#p_image").val(),
                    price: $("#p_price").val(),
                    count: 1
                }
            ];
            window.localStorage.setItem('cart', JSON.stringify(item));
            Swal.fire(
                'Great!',
                'Product Added Success!',
                'success'
            ).then(()=>{
                window.location.reload();
            })

        }else{
            let myObject = JSON.parse(window.localStorage.getItem('cart'));
            let newItem = {
                id: $("#p_id").val(),
                name: $("#p_name").val(),
                image: $("#p_image").val(),
                price: $("#p_price").val(),
                count: 1
            };

            let added = false;
            let items = [];
            for(let key in myObject){
                let currentLoopingData = myObject[key];
                if(currentLoopingData.id === newItem.id)
                {
                    let updateCount = {
                        id: currentLoopingData.id,
                        name: currentLoopingData.name,
                        image: currentLoopingData.image,
                        price: currentLoopingData.price,
                        count: currentLoopingData.count + 1
                    }
                    items.push(updateCount);
                    added =true
                }else{
                    items.push(currentLoopingData);
                }
            }

            if(added === false){
                items.push(newItem);
            }
            window.localStorage.setItem('cart', JSON.stringify(items));

            Swal.fire(
                'Great!',
                'Product Added Success!',
                'success'
            ).then(()=>{
                window.location.reload();
            })

        }


    });


    // -------- add cart list-------------------------------------------------------

    let $cartList = $("#cartList");
    let $cartListTable = $("#cartListTable");
    let localStorageCartList = window.localStorage.getItem('cart');
    if (localStorageCartList !== null)
    {
        let objectData = JSON.parse(localStorageCartList);
        let totalPrice = 0;
        for (let key in objectData){
            let singlePrice = ( objectData[key].count * objectData[key].price);

            $cartListTable.append("<tr>" +
                "<td>"+objectData[key].id+"</td>" +
                "<td>"+objectData[key].name+"</td>" +
                "<td>"+objectData[key].price+"</td>" +
                "<td>"+objectData[key].count+"x</td>" +
                "<td>"+singlePrice+"</td>" +
                "</tr>");
            totalPrice+= singlePrice;
        }

        $("#productCount").html(objectData.length);
        $("#currentTotalPrice").html("$"+totalPrice);

        $cartListTable.append("<tr>" +
            "<td colspan='4' class='text-right'>Total</td>" +
            "<td>"+totalPrice+"</td>" +
            "</tr>");
    }else {
        $cartList.empty();

        $cartList.html("<div class='h1 d-flex justify-content-center align-items-center' style='height: 50vh'>Your Cart is empty</div>");
    }


    // ----------------------End add to card ---------------------------------------------


    //-------------------------product List For CheckOut------------------------------------

        let $productListForCheckOut = $("#productListForCheckOut");
        $productListForCheckOut.append();

        if (localStorageCartList !== null)
        {
            let objectData = JSON.parse(localStorageCartList);
            let totalPrice = 0;
            for (let key in objectData){
                let singlePrice = ( objectData[key].count * objectData[key].price);

                $productListForCheckOut.append("<tr>" +
                    "<td>"+objectData[key].name+"</td>" +
                    "<td>"+objectData[key].price+"</td>" +
                    "<td>"+objectData[key].count+"x</td>" +
                    "<td>"+singlePrice+"</td>" +
                    "</tr>");
                totalPrice+= singlePrice;
            }
            $productListForCheckOut.append("<tr>" +
                "<td colspan='3' class='text-right'>Total</td>" +
                "<td>"+totalPrice+"</td>" +
                "</tr>");
        }else {
            let $orderCart = $("#orderCart");
            $orderCart.empty();
            $orderCart.append("<div class='d-flex justify-content-center align-items-center h2' style='height: 10vh;'>Your Cart is empty, Order First</div>")
        }


        //confirm order

    $("#checkoutForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
            },
            email: {
                required: true,
                email: true
            },
            phone:{
                required: true,
                minlength: 10,
                maxlength: 15
            },
            password: {
                required: true,
                minlength: 6
            }

        },
        submitHandler: function(form) {
            window.localStorage.removeItem('cart');
            form.reset();
            Swal.fire(
                'Order Confirmed',
                'Happy Shopping',
                'Success'
            ).then(()=>{
                window.location.href = base_url + "index.php/home";
            });
        }
    })
        $("#confirmOrder").click(()=>{
            $("#checkoutForm").submit();

            /*window.localStorage.removeItem('cart');
            Swal.fire(
                'Order Confirmed',
                'Happy Shopping',
                'Success'
            ).then(()=>{
                window.location.href = base_url + "index.php/home";
            });*/
        })

    //----------------------End---productListForCheckOut---------------------------------
})

