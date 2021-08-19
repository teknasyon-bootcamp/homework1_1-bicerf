<?php
$age = 12;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
if($age>=0 && $age <=14){
    echo "Çocuk";
}
elseif ($age>14 && $age<25) {
    echo "Genç";
}
elseif ($age>=25 && $age<65) {
    echo "Yetişkin";
}
elseif ($age>=65){
    echo "Yaşlı";
}
else {
    echo "Negatif değer girmeyiniz!";
}