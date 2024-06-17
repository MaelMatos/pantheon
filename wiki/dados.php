<?php
function D(int $n,int $l){
    $d=0;
    $dr=0;
    while($n>0){
        echo "<script>console.log('rolando os dados de ".$l."lados(".$n.")...')</script>";
        $d=random_int(1,$l);
        echo "<script>console.log('".$d."')</script>";
        $n = $n-1;
        $dr = $dr+$d;
    }
    return $dr;}
function D+(int $n,int $l){
    $d=0;
    $dr=0;
    echo "<script>console.log('rolando os dados de ".$l."lados...')</script>";
    while($n>0){
        $d=random_int(1,$l);
        if($dr<$d){
            $dr = $d;
        }
        $n = $n-1;
    }
    echo "<script>console.log('".$d."')</script>";
    return $dr;
}
function D-(int $n,int $l){
    $d=0;
    $dr=0;
    echo "<script>console.log('rolando os dados de ".$l."lados...')</script>";
    while($n>0){
        $d=random_int(1,$l);
        if($dr>$d){
            $dr = $d;
        }
        $n = $n-1;
    }
    echo "<script>console.log('".$d."')</script>";
    return $dr;
}
function D++(int $n,int $l){
    $d=0;
    $dr=0;
    while($n>0){
        echo "<script>console.log('rolando os dados de ".$l."lados(".$n.")...')</script>";
        $d=random_int(1,$l);
        echo "<script>console.log('".$d."')</script>";
        if($d==1){
            echo "<script>console.log('re-rolando...')</script>";
            continue;
        }
        else{
            $n = $n-1;
            $dr = $dr+$d;
        }
    }
    return $dr;
}
?>