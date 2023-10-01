
function sub()
{
    selectElement1 = document.getElementById('sel1');
    output1 = selectElement1.options[selectElement1.selectedIndex].value;


    selectElement2 = document.getElementById('sel2');
    output2 = selectElement2.options[selectElement2.selectedIndex].value;

    var result=0;
    x=document.getElementById("amount").value;
  
     if(output1=="egypt" && output2=="america")
     {
        document.getElementById("conv").innerHTML="Converted Amount: ";

        z=document.getElementById("dollar").innerHTML;
        result=x/z;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "$");
      
    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="egypt" && output2=="kuit")
     {
        di=document.getElementById("dinar").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x/di;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "KD");
      
    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="egypt" && output2=="saudia")
     {
        r=document.getElementById("riyal").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x/r;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "SR");
      

    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="egypt" && output2=="portoghal")
     {
      e=document.getElementById("euro").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x/e;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "€");
      
    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="egypt" && output2=="emirat")
     {
      d=document.getElementById("dirham").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x/d;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "UAE");
      
    document.getElementById("conv").style.display=" block";
   
    
     }
     else if(output1=="portoghal" && output2=="america")
     {
      
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("euro").innerHTML/document.getElementById("dollar").innerHTML;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "$");
      
    document.getElementById("conv").style.display=" block";
   
    
     }
     else if(output1=="portoghal" && output2=="kuit")
     {
      
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("euro").innerHTML/document.getElementById("dinar").innerHTML;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "KD");
      
    document.getElementById("conv").style.display=" block";
   
    
     }
     else if(output1=="portoghal" && output2=="saudia")
     {
        r=document.getElementById("riyal").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("euro").innerHTML/r;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "SR");
      

    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="portoghal" && output2=="emirat")
     {
        d=document.getElementById("dirham").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("euro").innerHTML/d;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "UAE");
      

    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="portoghal" && output2=="egypt")
     {
        egy=document.getElementById("egy").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("euro").innerHTML/egy;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "Egy");
      

    document.getElementById("conv").style.display=" block";
     }

     else if(output1=="america" && output2=="kuit")         
     {
        dinar=document.getElementById("dinar").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dollar").innerHTML/dinar;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "KD");
      

    document.getElementById("conv").style.display=" block";
     }
   

     else if(output1=="america" && output2=="saudia")
     {
        r=document.getElementById("riyal").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dollar").innerHTML/r; 
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "SR");
      

    document.getElementById("conv").style.display=" block";
     }
   

     else if(output1=="america" && output2=="portoghal")
     {
        e=document.getElementById("euro").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dollar").innerHTML/e;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "€");
      

    document.getElementById("conv").style.display=" block";
     }
   

     else if(output1=="america" && output2=="emirat")
     {
        d=document.getElementById("dirham").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dollar").innerHTML/d;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "UAE");
      

    document.getElementById("conv").style.display=" block";
     }
   

     else if(output1=="america" && output2=="egypt")
     {
        egy=document.getElementById("egy").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dollar").innerHTML/egy;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "EGY");
      

    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="kuit" && output2=="america")         
     {
        dollar=document.getElementById("dollar").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dinar").innerHTML/dollar;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "$");
      

       document.getElementById("conv").style.display=" block";
     }
     else if(output1=="kuit" && output2=="saudia")         
     {
        riyal=document.getElementById("riyal").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dinar").innerHTML/riyal;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "SR");
      

       document.getElementById("conv").style.display=" block";
     }
     else if(output1=="kuit" && output2=="portoghal")         
     {
        euro=document.getElementById("euro").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dinar").innerHTML/euro;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "€");
      

       document.getElementById("conv").style.display=" block";
     }
     else if(output1=="kuit" && output2=="emirat")         
     {
        dirham=document.getElementById("dirham").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dinar").innerHTML/dirham;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "USA");
      

       document.getElementById("conv").style.display=" block";
     }
     else if(output1=="kuit" && output2=="egypt")         
     {
        egy=document.getElementById("egy").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("dinar").innerHTML/egy;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "egy");
      

       document.getElementById("conv").style.display=" block";
     }


     else if(output1=="saudia" && output2=="egypt")         
     {
        egy=document.getElementById("egy").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("riyal").innerHTML/egy;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "egy");
      

       document.getElementById("conv").style.display=" block";
     }
     else if(output1=="saudia" && output2=="emirat")         
     {
        dirham=document.getElementById("dirham").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("riyal").innerHTML/dirham;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "USA");
      

       document.getElementById("conv").style.display=" block";
     }
     else if(output1=="saudia" && output2=="america")         
     {
        dollar=document.getElementById("dollar").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("riyal").innerHTML/dollar;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);riyal
       y.insertAdjacentText('beforeend', "$");
      

       document.getElementById("conv").style.display=" block";
     }
     else if(output1=="saudia" && output2=="kuit")         
     {
        dinar=document.getElementById("dinar").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("riyal").innerHTML/dinar;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "KD");
      

       document.getElementById("conv").style.display=" block";
     }
     else if(output1=="saudia" && output2=="portoghal")         
     {
        euro=document.getElementById("euro").innerHTML;
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x*document.getElementById("riyal").innerHTML/euro;
        const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "€");
      

       document.getElementById("conv").style.display=" block";
     } 
//   emiraaaaaaaaaaaaaaaaaaaaaaaaaaatttttttttttttttttttttttttttttttttt

else if(output1=="emirat" && output2=="egypt")         
{
   egy=document.getElementById("egy").innerHTML;
   document.getElementById("conv").innerHTML="Converted Amount: ";
   result=x*document.getElementById("dirham").innerHTML/egy;
   const y=document.getElementById("conv") ;

  y.insertAdjacentText('beforeend', result);
  y.insertAdjacentText('beforeend', "egy");
 

  document.getElementById("conv").style.display=" block";
}
else if(output1=="emirat" && output2=="emirat")         
{
   dirham=document.getElementById("dirham").innerHTML;
   document.getElementById("conv").innerHTML="Converted Amount: ";
   result=x*document.getElementById("dirham").innerHTML/dirham;
   const y=document.getElementById("conv") ;

  y.insertAdjacentText('beforeend', result);
  y.insertAdjacentText('beforeend', "USA");
 

  document.getElementById("conv").style.display=" block";
}
else if(output1=="emirat" && output2=="america")         
{
   dollar=document.getElementById("dollar").innerHTML;
   document.getElementById("conv").innerHTML="Converted Amount: ";
   result=x*document.getElementById("dirham").innerHTML/dollar;
   const y=document.getElementById("conv") ;

  y.insertAdjacentText('beforeend', result);riyal
  y.insertAdjacentText('beforeend', "$");
 

  document.getElementById("conv").style.display=" block";
}
else if(output1=="emirat" && output2=="kuit")         
{
   dinar=document.getElementById("dinar").innerHTML;
   document.getElementById("conv").innerHTML="Converted Amount: ";
   result=x*document.getElementById("dirham").innerHTML/dinar;
   const y=document.getElementById("conv") ;

  y.insertAdjacentText('beforeend', result);
  y.insertAdjacentText('beforeend', "KD");
 

  document.getElementById("conv").style.display=" block";
}
else if(output1=="emirat" && output2=="portoghal")         
{
   euro=document.getElementById("euro").innerHTML;
   document.getElementById("conv").innerHTML="Converted Amount: ";
   result=x*document.getElementById("dirham").innerHTML/euro;
   const y=document.getElementById("conv") ;

  y.insertAdjacentText('beforeend', result);
  y.insertAdjacentText('beforeend', "€");
 

  document.getElementById("conv").style.display=" block";
} 
else       
{

   document.getElementById("conv").innerHTML="Converted Amount: ";
   
   const y=document.getElementById("conv") ;

  y.insertAdjacentText('beforeend', x);

 

  document.getElementById("conv").style.display=" block";
} 
   
};
function reset(){
    window.location.reload();
    document.getElementsByClassName("finalValue").innerHTML = "";
}

      