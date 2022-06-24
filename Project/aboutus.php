
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us page</title>
    <link rel="stylesheet" href="footer.css">

    <link rel="stylesheet" href="project_home.css">

    <style>
       *{
            margin:0;
            padding:0;
            box-sizing:border-box;  
        }
        body{
            background-color: rgb(197, 222, 98);
        }
        section{
            width:100%;
            /* background-color: cyan; */
            display: flex;
            justify-content: center;
            /* border: 3px solid red; */
        }
        .abc{
            width:100%;
            height:70px;
            border:2px solid black;
            background-color: rgb(98, 202, 123);
            border-radius: 2px;
        }

        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {

  text-align: left;
  padding: 8px;
}







.left{
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	height: 450px;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 90px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #27ae60;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 100px;
	}
}

#umang{
    margin-top:35px;
}
.about-header{
    width:100%;
    text-align:center;
    float:left;
    margin-top:20px;
    
}
.main-div-content{
    width:50%;
    float:left;
    height:450px;
    background-color: #fff;
}
.main-div-content img{
    height:400px;
    width:100%;
    border-radius:5px;
}
.about-part{
    margin: 10px 10px 10px 10px;
    padding : 10px 10px 10px 10px;
}
.about-second-part{
    margin: 10px 10px 10px 10px;
    padding : 10px 10px 10px 10px;
}
.about-third-part{
    margin: 10px 10px 10px 10px;
    padding : 10px 10px 10px 10px;
}


    </style>
</head>
<body>
    <section>
        <div class='abc'>
            <table>
                <tr>
           <th> <a href='session.php'><h3>MyAccount</h3></a></th>
            <th><a href='contactus.php'><h3>Contact us</h3></a></th>
            <th><a href='aboutus.php'><h3>About us</h3></a></th>
            <th><a href='#'><h3>Home Page</h3></a></th>
            <tr>         
    </table>
        </div>
    </section>
    <div class='about-header'><h1>About us Page</h1>
    </div>

    <div class='main-div-container'>
            <div class='main-div-content'>
            <img src='c5.jpg'></img>
</div>
<div class='main-div-content'>

<div class='about-part'><p>Welcome to Online Shoes Shopping, your number one source for shoes here you will get different type of shoes like Addidas,campus,sparx etc. We're dedicated to giving you the very best of product, with a focus on three characteristics, ie: dependability, customer service and uniqueness.
Founded in 2021 by Umang Kumar, Shopping store has come a long way from its beginnings in a  ie: Rajkot Gujarat. When shopping store first started out, his passion for selling product, ie: helping other parents be more eco-friendly, providing the best equipment for his fellow musicians] drove him to do intense research, quit her day job, and gave him the impetus to turn hard work and inspiration into to a booming online store. We now serve customers all over ie: The India, Rajkot ,Ahmedabad, Patna, and are thrilled to be a part of the quirky, eco-friendly, fair trade wing of the industry type, ie: fashion, baked goods, watches industry.</p></div>
   <div class='about-second-part'>
    <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
</div> 

<div class='about-third-part'>
    <p>Sincerely,<br>
Umang Kumar</p>
Sonu Kumar</p>
</div>
</div>
</div>

</body>

<div class="d-grid gap-2">
        <button class="btn btn-light" type="button" id='umang'>© 2022 Company, onlineshoes.com. All rights reserved.</button>
    </div>

</html>
