//alert("Hello from JS in separate file")


function calculate() {

    // getting value from HTML using DOM(document object model)
    var no1 = document.getElementById("no1").value; // Returns a string
    var no2 = document.getElementById("no2").value;

    // using parseFloat() function to convert string to Float
    var floatNo1 = parseFloat(no1);
    var floatNo2 = parseFloat(no2);

    var result = floatNo1 + floatNo2;


    //using DOM to show the value in the HTMl page
    //document.getElementById("results").innerHTML = "Result is: " + result;
    document.getElementById("results").innerText = "Result is: " + result;


}