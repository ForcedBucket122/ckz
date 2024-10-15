import java.io.FileWriter;
import java.io.IOException;
import java.util.Scanner;

public class Lista {
    Scanner scan = new Scanner(System.in);
    private int pojemnosc; //maksymalna ilosc elementow w tablicy
    private int[] liczby;

    private int rozmiar=0; //ilosc elementow w tablicy


    public Lista(int pojemnosc){
        this.pojemnosc=pojemnosc;
        liczby=new int[pojemnosc];
    }
    int i = 0;
    public void dodajElement(){
        if (rozmiar==pojemnosc){
            System.out.println("Lista jest pełna!");
        }else {
            System.out.print("Podaj element: ");
            int element = scan.nextInt();
            liczby[i] = element;
            i++;
            rozmiar++;
        }
    }
    public int znajdz(int x){
        for(int i=0; i<liczby.length;i++){
            if(x==liczby[i]){
                return i;
            }
        }
        return -1;
    }
    public void pisz(){
        System.out.println("Rozmiar "+rozmiar+", Pojemnosc: "+pojemnosc);
        System.out.println("Lista przechowywanych elementow");
        System.out.print("[");
        for (int i = 0; i<liczby.length;i++){
            if(i!= liczby.length-1){
                System.out.print(liczby[i]+",");
            }else{
                System.out.print(liczby[i]);
            }
        }
        System.out.print("]\n");
    }

    public void usunPierwszy(int x){
        int y=znajdz(x);
        if(y!=-1){
            for (int i=y; i< liczby.length;i++){
                if (liczby[y]==liczby[i]){
                    int tymczas=liczby[y];
                    liczby[y]=0;
                    if (liczby[znajdz(x)]==liczby[i]){
                        rozmiar--;
                        i= liczby.length;
                    }else{
                       liczby[y]=tymczas;
                    }
                }
            }
        }
    }

    public void usunPowtorzenia(){
        for (int i=0;i< liczby.length;i++){
            usunPierwszy(liczby[i]);
        }
    }

    public void zapiszDoPliku(){
        String data="";
        for (int i=0;i< liczby.length;i++){
            data+=liczby[i];
        }
        try (FileWriter fileWriter = new FileWriter(liczby[0]+".txt")) {
            fileWriter.write(data);
            System.out.println("Pomyślnie zapisano dane.");
        } catch (IOException e) {
            System.out.println("Wystąpił błąd.");
            e.printStackTrace();
        }
    }
}
