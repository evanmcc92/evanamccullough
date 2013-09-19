
        function MyFunction(divName){

        //hidden val
        var hiddenVal = document.getElementById("tempDivName"); 

        //hide old
        if(hiddenVal.Value != undefined){
            var oldDiv = document.getElementById(hiddenVal.Value); 
            oldDiv.style.display = 'none'; 
        }

        //show div
            var tempDiv = document.getElementById(divName); 
            tempDiv.style.display = 'block';              

        //save div ID
            hiddenVal.Value = document.getElementById(divName).getAttribute("id");

        }