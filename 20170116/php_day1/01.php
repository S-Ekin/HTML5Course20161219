<style>
    div{ width: 200px; height: <?php echo 2 * 100; ?>px;
        background-color: orange; }
</style>
<div></div> <h1> <?php echo 12 % 7; ?> </h1>
<?php
$name = "maxwell";//php�ı���, �൱��js�����var name = ""
echo $name; ?>
<script>
    var name = "<?php echo $name ?>"; //    var name = "maxwell";
    console.log(name);
</script>
