<?
session_start();
include('functions.php'); // Include de mon fichier global, bon là, ça ne sert à rien, pour l'instant :)
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="js.js" charset="utf-8"></script>
    <title>Le Rotbot 2024</title>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7078051412175211",
    enable_page_level_ads: true
  });
</script>
  </head>
  <body>
<div class="container-fluid">

<?
if (isset($_POST['message']) AND !empty($_POST['message']))
{

$rot = array('rots/rot1.mp3','rots/rot2.mp3','rots/rot3.mp3','rots/rot4.mp3');

?>
<audio autoplay>
  <source src="<?echo $rot[array_rand($rot)];?>" type="audio/mp3">
  </audio>
<?

}
?>


<div class="boxmessage">
      <form action="index.php" method="post" class="chat">
        <span></span>
        <div class="messages">
          <div class="message">
            <div class="mine">
              <p>Bonjour, je suis le Rotbot, vous pouvez me demander n'importe quoi</p>
              <date><b>Rotbot</b></date>
            </div>
          </div>
          <div class="message">
            <div class="his">
              <p>Vraiement n'importe quoi ?</p>
              <date><b>Visiteur</b> </date>
            </div>
          </div>
          <div class="message">
            <div class="mine">
              <p>Absolument tout, et je vous trouverai la réponse appropriée, vous n'avez qu'a essayer !</p>
              <date><b>Rotbot</b> </date>
            </div>
          </div>
        <input type="text" name="message" placeholder="Votre message">
        <input type="submit" value="Envoyer">

      </form>

</div>

<!-- Analytics Tracking start -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-92527092-1', 'auto');
ga('send', 'pageview');

</script>

<!-- Analytics Tracking end Test-->
</body>
</html>
