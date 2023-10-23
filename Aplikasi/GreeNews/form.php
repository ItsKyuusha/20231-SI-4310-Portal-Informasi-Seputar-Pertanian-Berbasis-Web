<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Website Ide Bisnis ">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="David Sugiarto, Muhammad Arief Hidayatullah">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <link rel="shortcut icon" href="desain/GREENEWS@2x.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css "href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	      <script src="main.js"></script>
          <title>GreeNews - Portal Informasi Seputar Pertanian</title>
    </head>
<body>
        <nav>
            <div class="logo-container">
                <img src="desain/GREENEWS@2x.png" alt="Logo Gree_News" class="logo-image">
            <ul class="menu">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="kontak.html">Contact Us</a></li>
                <li><a href="tentang.html">About Us</a></li>
            </ul>
        </div>
     
        <!-- Navbar Searching -->
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <button type="button" onclick="searchContent()"><i class="fa fa-search"></i></button>
            </div>
    </nav> 
        

        <div id="searchResults">
            <!-- Hasil pencarian akan ditampilkan di sini -->
        </div>
    
        <script>
            function searchContent() {
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById('searchInput');
                filter = input.value.toUpperCase();
                ul = document.getElementById('searchResults');
                li = ul.getElementsByTagName('li');
                
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName('a')[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = '';
                    } else {
                        li[i].style.display = 'none';
                    }
                }
            }
        </script>
<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Forum Diskusi GreeNews</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>

<footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="tentang.html">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="kontak.html">Contact Us</a></li>
                        <li><a href="tentang.html">About Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>List Menu</h4>
                    <ul>
                        <li><a href="berita.html">Berita</a></li>
                        <li><a href="tanaman.html">Tanaman</a></li>
                        <li><a href="forum.html">Forum</a></li>
                        <li><a href="kalkulator.html">Kalkulator</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://ne-np.facebook.com/david.sugiarto.564/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/_da049/"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/_da049/"><i class="fab fa-instagram"></i></a>
                        <a href="https://daaddimaki04.000webhostapp.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bwh">
        <p style="text-align: center">Copyright &copy; 2023 Gree_News</p>
    </div>   
    
</body>
</html>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial, sans-serif;
    }
    
    nav {
        background-color: khaki;
        color: dimgray;
        display: flex;
        justify-content: space-between; /* Membuat logo dan menu berada di dua sisi berbeda */
        align-items: center;    gap: 100px;
    }
    
    /* Navbar Searching */
    .search-container {
                float: right;
                margin-top: 10px;
                align-items: center;
            }
    
            .search-container input[type="text"] {
                padding: 5px;
                margin-top: 4px;
                margin-right: 16px;
                border: none;
                font-size: 17px;
            }
    
            .search-container button {
                padding: 5px 10px;
                background: #4CAF50;
                font-size: 17px;
                border: none;
                cursor: pointer;
            }
    
            .search-container button:hover {
                background: dimgray;
            }
    
            #searchResults {
                list-style: none;
            }
    
    .logo-container {
        display: flex;
        align-items: center;
    }
    
    .logo-image {
        max-width: 150px; /* Ukuran gambar logo */
        margin-right: 10px; /* Jarak antara logo gambar dan teks */
    }
    
    .logo {
        font-size: 24px;
        font-weight: bold;
    }

    .menu {
    list-style: none;
    
}

.menu li {
    display: inline;
    margin-right: 50px;
    font-size: 20px;
}

.menu a {
    color: dimgray;
    text-decoration: none;
    font-weight: bold;
}

/* CSS Footer */
.footer {
    background-color: khaki;
    padding: 70px 0;
    text-align: center;
}

.footer-row {
    display: flex;
    justify-content: flex-end; /* Menggeser menu-footer ke kanan */
}

.footer-col {
    text-align: left;
    margin-left: 20px; /* Memberi jarak antara kolom menu-footer */
}

.footer h4 {
    font-size: 18px;
    margin-bottom: 15px;
    color: #24262b;
    text-transform: capitalize;
    font-weight: 500;
    position: relative;
}

.footer h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: dimgray;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer ul {
    list-style: none;
    padding: 0;
}

.footer li {
    margin-bottom: 10px;
}

.footer a {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
}

/*---*/
    .footer-col{
       width: 25%;
       padding: 0 15px;
    }
    .footer-col h4{
        font-size: 18px;
        color: #4CAF50;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }
    .footer-col h4::before{
        content: '';
        position: absolute;
        left:0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }
    .footer-col ul li:not(:last-child){
        margin-bottom: 10px;
    }
    .footer-col ul li a{
        font-size: 16px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #4CAF50;
        display: block;
        transition: all 0.3s ease;
    }
    .footer-col ul li a:hover{
        color: dimgray;
        padding-left: 8px;
    }
    .footer-col .social-links a{
        display: inline-block;
        height: 35px;
        width: 35px;
        background-color: #4CAF50;
        margin:0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }
    .footer-col .social-links a:hover{
        color: #ffffff;
        background-color: dimgray;
    }

    .footer-bwh{
        background-color: khaki;
    }
</style>