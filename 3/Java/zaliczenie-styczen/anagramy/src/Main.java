import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Arrays;

public class Main {
    static StringBuilder odczytPliku = new StringBuilder();
    public static void main(String[] args) throws FileNotFoundException {
        odczyt();
        String[] slowa= odczytPliku.toString().split("\\s+");
        char[][][] wiersze = new char[5][5][];
        for (int i=0; i<5; i++ ){
            for (int j = 0; j <5; j++) {
                wiersze[i][j] = slowa[i * 5 + j].toCharArray();
            }
        }
        liczbaZnakowWwierszu(wiersze);
        czyAnagram(wiersze);
    }

    public static void odczyt() throws FileNotFoundException {
        int nextChar;
        try(FileReader fileReader = new FileReader("src/anagram.txt")){
            while ((nextChar = fileReader.read())!=-1){
                odczytPliku.append((char) nextChar);
            }
        } catch (IOException e) {
            throw new RuntimeException(e);
        }
    }

    public static void liczbaZnakowWwierszu(char[][][] tab){
        for (int i = 0; i < 5; i++) {
            int temp = 0;
            for (int j = 0; j < 5; j++) {
                int len = tab[i][0].length;
                if(tab[i][j].length==len){
//                    System.out.println(tab[i][j]);
                    temp+=j;
                    if (temp==10){
                        try(FileWriter fileWriter= new FileWriter("src\\odp_a.txt")) {
                            StringBuilder zapis = new StringBuilder();
                            for(char[] x: tab[i]){
                                zapis.append(x).append(" ");
                            }
                            fileWriter.append(zapis.toString());
                        } catch (IOException e) {
                            throw new RuntimeException(e);
                        }
                    }
                }
            }
        }
    }
    public static void czyAnagram(char[][][] tab){
        for (int i = 0; i < 5; i++) {
            boolean wszystkieAnagram = true;
            char[] wzorzec = tab[i][0];
            String wzorzecPosortowany = posortuj(wzorzec);
            for (int j = 1; j < 5; j++) {
                if(!wzorzecPosortowany.equals(posortuj(tab[i][j]))){
                    wszystkieAnagram = false;
                    break;
                }
            }
            if(wszystkieAnagram){
                try(FileWriter fileWriter= new FileWriter("src\\odp_b.txt")) {
                    StringBuilder zapis = new StringBuilder();
                    for(char[] x: tab[i]){
                        zapis.append(x).append(" ");
                    }
                    fileWriter.append(zapis.toString());
                } catch (IOException e) {
                    throw new RuntimeException(e);
                }
            }
        }
    }
    private static String posortuj(char[] tab){
        char[] kopia = Arrays.copyOf(tab, tab.length);
        Arrays.sort(kopia);
        return new String(kopia);
    }
}