<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:400,700");
body{
  margin:0;
  padding:0;
  height:100vh;
  overflow:hidden;
  text-align:center;
  font-family: 'Roboto', sans-serif;
  background:#f7f7f7;
}
h3{
  color:#383838;
  font-weight:700;
  font-size:2rem;
  margin:0 0 .2rem 0;
  transform:translateY(1rem);
  -webkit-transform:translateY(1rem);
  opacity:0;
  animation-delay:.9s;
  animation-duration:.3s;
  animation-fill-mode:forwards;
  animation-name:loadUp;
}
p{
  margin:0;
  padding:0;
  color:#696969;
  font-weight:300;
  transform:translateY(1rem);
  -webkit-transform:translateY(1rem);
  opacity:0;
   animation-delay:.95s;
  animation-duration:.3s;
  animation-fill-mode:forwards;
  animation-name:loadUp;
}
.thank-you-wrapper{
  width:0;
  margin: 4rem auto 0;
  border: 1px solid #b4ec97;
  width : 50vw;
  background: #bcfa9b;
  text-align:center;
  border-radius:.6rem;
  padding-bottom:3rem;
   animation-delay:.2s;
  animation-duration:.3s;
  animation-fill-mode:forwards;
  animation-name:getFullThankyouWidth;
}
.check-mark-block{
  position:relative;
  transform:translateY(0);
  opacity:0;
  margin:auto;
  width:8rem;
  height:8rem;
  background-image: linear-gradient(to top, #99f449 0%, #05ebb5 100%);
  border-radius:.6rem;
  overflow:hidden;
   animation-delay:.4s;
  animation-duration:.3s;
  animation-fill-mode:forwards;
  animation-name:loadUpThankyou;
}
.check-mark-wrapper{
  margin:0;
  padding:0;
  position:relative;
  text-align:center;
  margin:auto;
  padding:5rem 10% 4rem 16%;
}
.check-mark-wrapper span{
  position:relative;
  width: 3rem;
    height: .7rem;
    background: transparent;
    display: block;
    border-radius: 30px;
    transform: rotate(0);
    transition: all .3s;
    transform: rotate(33deg);
    position: relative;
  filter: drop-shadow(20px 10px 10px rgba(0, 0, 0, .2));
/*     border: 1px solid #ddd; */
}
.check-mark-wrapper span:last-child{
    width: 5rem;
    height: .7rem;
    display: block;
    border-radius: 30px;
    transform-origin: top;
    transition: all .3s;
    transform: translateY(-1.7rem) translateX(1rem)rotate(-56deg);
}
.check-mark-wrapper span::before{
  content: ' ';
  position:absolute;
  top:0;
  left:0;
  width:0%;
  height:100%;
  background:#fff;
  border-radius:30px;
  animation-delay:.65s;
  animation-duration:.3s;
  animation-fill-mode:forwards;
  animation-name:getFullWidth;
}
.check-mark-wrapper span:last-child::before{
  animation-delay:.85s;
}

@keyframes getFullWidth{
  0%{
    width:0;
  }
  100%{
    width:100%;
  }
}
@keyframes getFullThankyouWidth{
  0%{
    width:0;
    opacity:0;
  }
  100%{
    width:25%;
    opacity:1;
  }
}
@keyframes loadUpThankyou{
  0%{
    transform:translateY(0);
    opacity:0;
  }
  100%{
    transform:translateY(-2.5rem);
    opacity:1;
  }
}@keyframes loadUp{
  0%{
    transform:translateY(1rem);
    opacity:0;
  }
  100%{
    transform:translateY(0);
    opacity:1;
  }
}
@media only screen and (max-device-width: 767px) {
  .thank-you-wrapper{
    animation-name: getFullThankyouWidthSmall;
  }
  @keyframes getFullThankyouWidthSmall{
  0%{
    width:0;
    opacity:0;
  }
  100%{
    width:40%;
    opacity:1;
  }
}
}
</style>

    <body>
        <div class="thank-you-wrapper">
            <div class="check-mark-block">
              <div class="check-mark-wrapper">
                <span></span>
                <span></span>
              </div>
            </div>
                <h3>Ticket Creado</h3>
                <h2 style="margin-top: -10px">{{$id_ticket}}</h2>
                <p>Recibirás un correo electrónico con mayor información.</p>
          </div>
          <form action="/contactanos" method="get">
            @csrf
            <button type="submit" id="btn" onmouseover="mifuncion()" >
        </form>
        <script>
            window.addEventListener("load",function mifuncion(){
                document.getElementById("btn").click();
            })
        
        </script>
    </body>
</html>

{{-- <script>
    function redireccionar()
    {
       window.location.href = "/soporte";
    }

    setTimeout("redireccionar()", 3000);
</script> --}}
