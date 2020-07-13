<?php
$paragraph = 'Nel mezzo del cammin di nostra vita
mi ritrovai per una selva oscura,
ché la diritta via era smarrita.

Ahi quanto a dir qual era è cosa dura
esta selva selvaggia e aspra e forte
che nel pensier rinova la paura!

Tant’è amara che poco è più morte;
ma per trattar del ben ch’i’ vi trovai,
dirò de l’altre cose ch’i’ v’ ho scorte.

Io non so ben ridir com’i’ v’intrai,
tant’era pien di sonno a quel punto
che la verace via abbandonai.

Ma poi ch’i’ fui al piè d’un colle giunto,
là dove terminava quella valle
che m’avea di paura il cor compunto,

guardai in alto e vidi le sue spalle
vestite già de’ raggi del pianeta
che mena dritto altrui per ogne calle';


$paragraph_lenght = strlen($paragraph);
$badword_paragraph = $_GET['badword_paragraph'];
$modified_paragraph = str_replace('è cosa dura','***', $paragraph);


?>

<p> <?php echo $paragraph; ?> </p>
<hr>
<p>Lunghezza paragrafo: <?php echo $paragraph_lenght; ?> caratteri</p>
<hr>
<p> <?php echo $modified_paragraph; ?> </p>



