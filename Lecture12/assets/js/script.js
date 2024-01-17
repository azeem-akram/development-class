function addTask() {
    var inputBox = document.getElementById("inputBox");
    var taskName = inputBox.value;

    document.getElementById("inputBox").value = "";


    var taskList = document.getElementById("taskList");

    //Creat a new Element <li></li>
    var li = document.createElement("li");

    //Creates a new text
    var textElement = document.createTextNode(taskName);


    //Create a new Button 
    var button = document.createElement("button");
    button.appendChild(document.createTextNode("Mark as Done"))

    //Adding event to Mark as Done button
    button.onclick = function () {
        li.style.textDecoration = "line-through";
        li.style.color = "gray";
        button.remove();
        buttonEdit.remove();
    };


    //Creating an Edit button
    var buttonEdit = document.createElement("button");
    buttonEdit.appendChild(document.createTextNode("Change"))
    buttonEdit.onclick = function (){
        var newValue = prompt("Enter a new value");
        textElement.nodeValue = newValue;
    };




    //Appending all three elements to the li
    li.appendChild(textElement);
    li.appendChild(buttonEdit);
    li.appendChild(button);







    taskList.appendChild(li);



}