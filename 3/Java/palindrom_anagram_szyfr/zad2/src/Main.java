import java.io.FileReader;
import java.io.IOException;
import java.util.Arrays;

public class Main {
    public static void main(String[] args) {
        StringBuilder content = new StringBuilder();
        try (FileReader fileReader = new FileReader("src\\anagram.txt")) {
            int i;
            while ((i = fileReader.read()) != -1) {
                content.append((char) i);
            }
        } catch (IOException e) {
            throw new RuntimeException(e);
        }

        String[] slowa = content.toString().split("\\s+");
        int numberOfLines = slowa.length / 5;
        char[][][] wiersze = new char[numberOfLines][5][];

        for (int i = 0; i < numberOfLines; i++) {
            for (int j = 0; j < 5; j++) {
                wiersze[i][j] = slowa[i * 5 + j].toCharArray();
            }
        }
        liczbaZnakow(wiersze, 1);
    }

    public static void liczbaZnakow(char[][][] tab, int i) {
        boolean sameLength = true;
        int length = tab[i][0].length;

        for (int j = 1; j < tab[i].length; j++) {
            if (tab[i][j].length != length) {
                sameLength = false;
                break;
            }
        }

        if (sameLength) {
            System.out.println("All words in row " + i + " have the same number of characters.");
        } else {
            System.out.println("Not all words in row " + i + " have the same number of characters.");
        }
    }
}
