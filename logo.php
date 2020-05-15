<canvas id="ned" width="760" height="280"></canvas>

<script>
  var r=document.getElementById('ned');
     var ctd=r.getContext('2d');
     ctd.beginPath();
     ctd.fillStyle="cornflowerblue";
     ctd.arc(450,120,120,0,3*Math.PI);
     ctd.fill();
   //  ctd.stroke();
ctd.font="150px cursive";
    ctd.fillStyle="white";
    ctd.fillText("M",385,150);
/*ctx.font="60px cursive";
    ctd.fillStyle="red";
    ctd.fillText("M",420,155);*/
</script>