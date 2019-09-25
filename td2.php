<?php
function start_page($title)
{
    echo '<!DOCTYPE html> <html 
        lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};

start_page('test');
?>
<hr/><br/><strong>Test</strong><br/><hr/>
<?php
echo date ('l F d ,Y');
$jour = date('d/m/Y',strtotime('2020-04-01'));
?>


