import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Objects;

public class Main {
    public static void main(String[] args) {
        StringBuilder content = new StringBuilder();
        try (FileReader fileReader = new FileReader("src\\dane.txt")) {
            int i;
            while ((i = fileReader.read()) != -1) {
                content.append((char) i);
            }
        } catch (IOException e) {
            throw new RuntimeException(e);
        }
        String plik = content.toString();
        String[] slowa = plik.split("\\s+"); // Split by any whitespace
        ArrayList<String> czyPalindrom = new ArrayList<>();

        for (String word : slowa) {
            if(Objects.equals(word, reverse(word))){
                czyPalindrom.add(word);
            }
        }
        System.out.println("Palindromy to:");
        for (String x:czyPalindrom){
            System.out.println(x);
        }
    }

    public static String reverse(String x) {
        StringBuilder reversed = new StringBuilder();
        char[] tab = x.toCharArray();
        for (int i = tab.length - 1; i >= 0; i--) {
            reversed.append(tab[i]);
        }
        return reversed.toString();
    }
}
