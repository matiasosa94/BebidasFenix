<?php
function listado(){
    $listado_productos = array(
        array('id'=>1, 'nombre'=>'Scottish Ale', 'categoria'=>'Cerveza', 'precio'=>550, 'cantidad' =>'473ml', 'marca'=>'Temple'),
        array('id'=>2, 'nombre'=>'Wolf Ipa', 'categoria'=>'Cerveza', 'precio'=>550, 'cantidad' =>'473ml', 'marca'=>'Temple'),
        array('id'=>3, 'nombre'=>'Roja', 'categoria'=>'Cerveza', 'precio'=>350, 'cantidad' =>'473ml', 'marca'=>'Andes'),
        array('id'=>4, 'nombre'=>'Rubia', 'categoria'=>'Cerveza', 'precio'=>350, 'cantidad' =>'473ml', 'marca'=>'Andes'),
        array('id'=>5, 'nombre'=>'Negra', 'categoria'=>'Cerveza', 'precio'=>350, 'cantidad' =>'473ml', 'marca'=>'Andes'),
        array('id'=>6, 'nombre'=>'Ipa', 'categoria'=>'Cerveza', 'precio'=>350, 'cantidad' =>'473ml', 'marca'=>'Andes'),
        array('id'=>7, 'nombre'=>'Red Label', 'categoria'=>'Whisky', 'precio'=>5150, 'cantidad' =>'750ml', 'marca'=>'Johnnie Walker'),
        array('id'=>8, 'nombre'=>'Black Label', 'categoria'=>'Whisky', 'precio'=>9150, 'cantidad' =>'750ml', 'marca'=>'Johnnie Walker'),
        array('id'=>9, 'nombre'=>'Gold Label', 'categoria'=>'Whisky', 'precio'=>15550, 'cantidad' =>'750ml', 'marca'=>'Johnnie Walker'),
        array('id'=>10, 'nombre'=>'Red Label', 'categoria'=>'Whisky', 'precio'=>8350, 'cantidad' =>'1Lt', 'marca'=>'Johnnie Walker'),
        array('id'=>11, 'nombre'=>'Black Label', 'categoria'=>'Whisky', 'precio'=>10850, 'cantidad' =>'1Lt', 'marca'=>'Johnnie Walker'),
        array('id'=>12, 'nombre'=>'Gold Label', 'categoria'=>'Whisky', 'precio'=>17550, 'cantidad' =>'1Lt', 'marca'=>'Johnnie Walker'),
        array('id'=>13, 'nombre'=>'Irlandes', 'categoria'=>'Whisky', 'precio'=>5050, 'cantidad' =>'750ml', 'marca'=>'Jameson'),
        array('id'=>14, 'nombre'=>'Fond de cave', 'categoria'=>'Vino','uva'=>'Malbec', 'precio'=>1550, 'cantidad' =>'750ml', 'marca'=>'Trapiche'),
        array('id'=>15, 'nombre'=>'Medalla', 'categoria'=>'Vino','uva'=>'Malbec', 'precio'=>3250, 'cantidad' =>'750ml', 'marca'=>'Trapiche'),
        array('id'=>16, 'nombre'=>'Fond de cave', 'categoria'=>'Vino','uva'=>'Cabernet Sauvignon', 'precio'=>1550, 'cantidad' =>'750ml', 'marca'=>'Trapiche'),
        array('id'=>17, 'nombre'=>'Luigi Bosca', 'categoria'=>'Vino','uva'=>'Malbec', 'precio'=>3350, 'cantidad' =>'750ml', 'marca'=>'Luigi Bosca'),
        array('id'=>18, 'nombre'=>'La Linda', 'categoria'=>'Vino','uva'=>'Malbec', 'precio'=>2150, 'cantidad' =>'750ml', 'marca'=>'Luigi Bosca'),
        array('id'=>19, 'nombre'=>'Luigi Bosca', 'categoria'=>'Vino','uva'=>'Cabernet Sauvignon', 'precio'=>3350, 'cantidad' =>'750ml', 'marca'=>'Luigi Bosca'),
        array('id'=>20, 'nombre'=>'La Linda', 'categoria'=>'Vino','uva'=>'Cabernet Sauvignon', 'precio'=>2150, 'cantidad' =>'750ml', 'marca'=>'Luigi Bosca'),
        array('id'=>21, 'nombre'=>'Luigi Bosca', 'categoria'=>'Vino','uva'=>'Chardonnay', 'precio'=>1950, 'cantidad' =>'750ml', 'marca'=>'Luigi Bosca'),
        array('id'=>22, 'nombre'=>'Alamos', 'categoria'=>'Vino','uva'=>'Malbec', 'precio'=>1980, 'cantidad' =>'750ml', 'marca'=>'Catena Zapata'),
        array('id'=>23, 'nombre'=>'Alamos', 'categoria'=>'Vino','uva'=>'Cabernet Sauvignon', 'precio'=>1980, 'cantidad' =>'750ml', 'marca'=>'Catena Zapata'),
        array('id'=>24, 'nombre'=>'Saint Felicien', 'categoria'=>'Vino','uva'=>'Malbec', 'precio'=>2880, 'cantidad' =>'750ml', 'marca'=>'Catena Zapata'),
        array('id'=>25, 'nombre'=>'Saint Felicien', 'categoria'=>'Vino','uva'=>'Cabernet Sauvignon', 'precio'=>2880, 'cantidad' =>'750ml', 'marca'=>'Catena Zapata'),
        array('id'=>26, 'nombre'=>'Sapphire', 'categoria'=>'Gin', 'precio'=>11150, 'cantidad' =>'750ml', 'marca'=>'Bombay'),
        array('id'=>27, 'nombre'=>'Aconcagua', 'categoria'=>'Gin', 'precio'=>3040, 'cantidad' =>'750ml', 'marca'=>'Aconcagua'),
        array('id'=>28, 'nombre'=>'Buenos Aires', 'categoria'=>'Gin', 'precio'=>4500, 'cantidad' =>'750ml', 'marca'=>'Buenos Aires'),
        array('id'=>29, 'nombre'=>'Tanqueray', 'categoria'=>'Gin', 'precio'=>6250, 'cantidad' =>'750ml', 'marca'=>'Tanqueray'),
        array('id'=>30, 'nombre'=>'Cointreau', 'categoria'=>'Licor', 'precio'=>14250, 'cantidad' =>'700ml', 'marca'=>'Cointreau'),
        array('id'=>31, 'nombre'=>'Sambuca', 'categoria'=>'Licor', 'precio'=>6050, 'cantidad' =>'700ml', 'marca'=>'Borghetti'),
        array('id'=>32, 'nombre'=>'Amarula', 'categoria'=>'Licor', 'precio'=>7550, 'cantidad' =>'750ml', 'marca'=>'Amarula'),
        array('id'=>33, 'nombre'=>'Añejo', 'categoria'=>'Ron', 'precio'=>3600, 'cantidad' =>'750ml', 'marca'=>'Havana Club'),
        array('id'=>34, 'nombre'=>'Dorado', 'categoria'=>'Ron', 'precio'=>3000, 'cantidad' =>'750ml', 'marca'=>'Bacardi'),
        array('id'=>35, 'nombre'=>'Fernet', 'categoria'=>'Aperitivo', 'precio'=>2850, 'cantidad' =>'1Lt', 'marca'=>'Branca'),
        array('id'=>36, 'nombre'=>'Rosso', 'categoria'=>'Aperitivo', 'precio'=>1350, 'cantidad' =>'950ml', 'marca'=>'Cinzano'),
        array('id'=>37, 'nombre'=>'Bianco', 'categoria'=>'Aperitivo', 'precio'=>1350, 'cantidad' =>'950ml', 'marca'=>'Cinzano')
    );
        
        return $listado_productos;
    };

    

?>