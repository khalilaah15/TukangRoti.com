#include<stdio.h>
int main(){
    // contoh variable di C yaitu int, char, float
    int angka_bulat = 15;
    float angka_desimal = 1.45;
    char karakter_satu_huruf = 'A'; // Char harus menggunakan petik satu

    // untuk mengeprint variabel di c harus menggunakan format specifier
    // %d atau %i untuk integer
    // %f atau %F untuk float
    // %c untuk character
    // %lf untuk double
    // %s untuk string
    // %lu untuk melihat hasil byte

    // Contoh
    printf("\n\n%d\n", 15);
    printf("%d\n", angka_bulat);
    printf("Umur saya tahun depan adalah %d\n", angka_bulat);
    printf("%.1d\n\n", angka_bulat + angka_desimal); // jika format specifier yang dimasukkan tidak sesuai dengan tipe data, akan terjadi eror
    
    // Jika kita menggunakan angka sebagai value char, akan dikonversi ke ASCII
    //contoh
    char random1 = 34, random2 = 66, random3 = 123; //penulisan ini sah
    printf("%c %c %c\n\n",random1,random2,random3);

    // DECIMAL PRECISION (MENGATUR BANYAKNYA DESIMAL)
    float random_float = 123.5;
    printf("%f\n", random_float); // hasilnya akan banyak angka 0 
    // tambahkan (.) dan angka dibelakang tanda (%) akan mengatur desimalnya
    printf("%.3f\n", random_float);
    printf("%.1f\n\n",random_float);
    
    // MEMBUAT STRING
    char myString[] = "Ini adalah string";
    printf("%s\n\n", myString);

    // UKURAN DAN CARA MENGUKUR TIPE DATA
    // int = 2 atau 4 bytes
    // float = 4 bytes
    // double = 8 bytes 
    // char = 1 bytes
    // untuk mengukur tipe data gunakan sizeof
    
    int myInt;
    float myFloat;
    double myDouble;
    char myChar;
    
    printf("%lu\n",sizeof(myInt));
    printf("%lu\n",sizeof(myFloat));
    printf("%lu\n",sizeof(myDouble));
    printf("%lu\n\n",sizeof(myChar));

    // KONVERSI (CASTING)
    float sum = (float) 2 / 5; // apabila tidak dicasting, hasilnya adalah 2
    printf("%.1f\n", sum);
    // cara ini juga bisa
    int variable1 = 5;
    int variable2 = 2;
    float hasil = (float) variable1 / variable2;
    printf("%.1f\n\n",hasil);
}