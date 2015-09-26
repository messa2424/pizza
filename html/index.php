<DIV id="background">
    <Div id="main" class="box">
        <?php
        $DOM = simplexml_load_file('data/menu.xml');
        
        if( isset($DOM))
        foreach ( $DOM->xpath('/menu/category') as $cat){
            echo '<DIV class="category">'.$cat['name'].'</DIV>'."\n";
            foreach ( $cat->item as $item ){
                echo 
                '<DIV class="item">'.
                '<SPAN class="name">'.$item->name.'</SPAN>';
                
                foreach( $item->sizes->children()as $size) 
                echo 
                '<SPAN class="prize">'.$size.'</SPAN>';
                echo '</DIV>'."\n";
            }
        }
        ?>
    </Div>
</DIV>