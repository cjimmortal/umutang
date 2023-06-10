<div class="navbar" id="navbar">    
    <a class="navbar-box"><img class="navbar-icons" onclick="closetab()" src="assets/menu.png"><p class="navbar-title">Dashboard</p></a>
    <div class="navbar-side-contents">
        <div class="navbar-side-box">
            <img class="navbar-admin-img" src="assets/2X2_1X1_ID_PIC_2022.png">
            <p class="navbar-side-name">Welcome, Cj Carpon</p>
            <img class="navbar-admin-img-dropdwon" onclick="openProfileNav()" src="assets/dropdown.png">
        </div>
        <!-- <button class="navbar-button"><img class="navbar-side-icons"  src="assets/logout.png">Logout</button> -->
    </div>
</div>
<!-- <div class="profile-nav" id="profile-nav">

</div> -->

<script>
    function openProfileNav() {
        $('#profile-nav').css("display","none");
    }
</script>

<style>
   .navbar{
    background-color: #254094;
    height: 50px;
    margin-left: 300px;
    position: sticky;
    top: 0;
    z-index: 1000;
    transition: margin-left 0.5s;
    
   } 
   .navbar-icons{
        height:20px;
        padding-right:1rem;
   }
   .navbar-box{
    display:flex;
    padding-top:8px;
    
   }
   .navbar-title{
    font-size:12px;
    font-weight:bold;
    color:white;
    padding-top:-8px;
   }
   .navbar-side-contents{
        float:right;
        display:flex;
   }
   .navbar-side-icons{
        height:15px;
        margin:-2px 0.3000000000000007rem 0 0;
   }
   .navbar-button{
    margin-top: 1px;
    margin-bottom: 12px;
    padding: -5px 0.5rem 0 0.5rem;
    background-color: #3B5ABB;
    font-size: 10px;
    color: white;
    font-weight: bold;
    border: solid #d9d9d93b 1px;
    border-radius: 1px;

   }
   .navbar-side-box{
    display:flex;
   }
   .navbar-admin-img{
    height:30px;
    border-radius:50px;
    margin: 1px 0.8rem 0 0;
   }
   .navbar-side-name{
    font-size:12px;
    color:white;
    margin-top:6px;
    /* font-weight:bold; */
   }
   .navbar-admin-img-dropdwon{
    height:15px;
    margin: 10px 1rem 0 0.5rem;
   }
   .profile-nav{
    height: 161px;
    width: 210px;
    background-color: blue;
    float: right;
    position: absolute;
    top: 50px;
    right: 0;
    z-index: 1000;
   }
   
</style>