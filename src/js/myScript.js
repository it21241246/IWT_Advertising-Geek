function loadData(data)
{
    if(data == "btn1")
    {
        document.getElementById("phoneImage").src="images/iphonexs.jpg";
        document.getElementById("para").innerHTML="The iPhone XS developed and marketed by Apple Inc. They are the twelfth-generation flagships of the iPhone, succeeding the iPhone X.";
    }
    else if(data == "btn2")
    {
        document.getElementById("phoneImage").src="images/iphonexsmax.jpg";
        document.getElementById("para").innerHTML="The iPhone XS Max developed and marketed by Apple Inc. They are the twelfth-generation flagships of the iPhone, succeeding the iPhone X.";
    }
    else if(data == "btn3")
    {
        document.getElementById("phoneImage").src="images/iphone8splus.png";
        document.getElementById("para").innerHTML="The iPhone 8s plus developed and marketed by Apple Inc. They are the eleventh-generation flagships of the iPhone, succeeding the iPhone 7.";
    }

}

function priceForLoop()
{
    var phone = ["iphone Xs = Rs 15000/=", "iphone Xs Max = Rs 25000/=", "iphone 8s plus = Rs 8000/="];
    document.getElementById("phoneImage").src="images/iphones.jpg";
    var message = "List of Prices (using for loop)<br><br>";
    var len = phone.length;

    for(var i=0; i<len; i++)
    {
        message += phone[i]+"<br>";
    }

    document.getElementById("para").innerHTML= message;
}

function productForInLoop()
{
    var phone = [];
    phone["iphone Xs"] = "Rs 15000/=";
    phone["iphone Xs Max"] = "Rs 25000/=";
    phone["iphone 8s plus"] = "Rs 8000/=";

    document.getElementById("phoneImage").src="images/iphones.jpg";
    var message = "List of Prices (using for loop)<br><br>";

    for(var items in phone)
    {
        message += items + ":" +  phone[items] + "<br>";
    }

    document.getElementById("para").innerHTML= message;
}

function pricesHigher()
{
    var phone = [];
    phone["iphone Xs"] = 15000;
    phone["iphone Xs Max"] = 25000;
    phone["iphone 8s plus"] = 8000;
    phone["iphone 7s"] = 6000;
    phone["iphone X"] = 11000;

    document.getElementById("phoneImage").src="images/iphones.jpg";
    var message = "List of Prices higher than 10000(using for loop)<br><br>";

    for(var items in phone)
    {
        if(phone[items]>10000)
        {
            message += items + ": Rs " +  phone[items] + "<br>";
        }
    }
    document.getElementById("para").innerHTML= message;
}

function priceLower()
{
    var phone = [];
    phone["iphone Xs"] = 15000;
    phone["iphone Xs Max"] = 25000;
    phone["iphone 8s plus"] = 8000;
    phone["iphone 7s"] = 6000;
    phone["iphone X"] = 11000;

    document.getElementById("phoneImage").src="images/iphones.jpg";
    var message = "List of Prices higher than 10000(using for loop)<br><br>";

    for(var items in phone)
    {
        if(phone[items]<10000)
        {
            message += items + ": Rs " +  phone[items] + "<br>";
        }
    }
    document.getElementById("para").innerHTML= message;
}

function checkPassword()
{
    var pass = document.getElementById("pwd").value;
    var repass = document.getElementById("repwd").value;

    if(pass!= repass)
    {
        window.alert("Password doesnt match");
    }
    else
    {
        window.alert("success");
    }


}