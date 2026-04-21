 <?php
    function isKabisat($tahun){
        if(!is_numeric($tahun)){
            echo $tahun." bukan tahun kabisat";
        }
        else if($tahun%4==0){
            echo $tahun." adalah tahun kabisat";
        }
        else{
            echo $tahun." bukan tahun kabisat";
        }
    }    

    function cetakNama($nama){
        echo "halo, ".$nama;
    }

    function isEven($a){
        if($a % 2 == 0){
			echo "Angka ".$a." adalah bilangan genap.";
		}
        else{
			echo "Angka ".$a." adalah bilangan ganjil.";
		}
    }

    function printNumber(  $start,  $end){
        if(!is_numeric($start) || !is_numeric($end)){
            echo "one or both of the number is not a numeric";
        }
        else if($start < $end){
            for($start; $start <= $end; $start++){
               echo $start." "; 
            }
        }
        else if($start > $end){
            for($start; $start >= $end; $start--){
                echo $start." ";
            }
        }
        else{
            echo "something is wrong!";
        }
    }

    echo printNumber(5, 10);
    
?>
