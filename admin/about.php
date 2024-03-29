<?php include('header.php');

$aboutsorus = $db->prepare("SELECT * FROM se_about where a_id=:a_id");
$aboutsorus->execute(['a_id' => "0"]);

$aboutcek = $aboutsorus->fetch(PDO::FETCH_ASSOC);
?>
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card border-0 shadow-lg my-3 justify-content-center" style="width: 50%; text-align: center;margin: auto;" >
                <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Haqqında</h1>
                            </div>
                            <form class="about" action="netting/process" method="POST">
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-about" name="sayt"
                                            placeholder="sayt" value="<?php echo $aboutcek['sayt']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-about" name="nomre"
                                        placeholder="Nomre" value="<?php echo $aboutcek['nomre']; ?>">
                                </div>
                                <button type="submit" name="eabout" class="btn btn-primary btn-about btn-block">
                                    Düzəliş et
                                </button>
                            </form>
                        </div>
                    </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

       
<?php include('footer.php');?>