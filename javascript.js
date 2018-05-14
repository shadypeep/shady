function loader(){
    document.getElementById("lyk").onclick=function(){
        let numlike=document.getElementById("numlike").innerHTML;
        
        document.getElementById("numlike").innerHTML=parseInt(numlike,10)+1;
    };
}