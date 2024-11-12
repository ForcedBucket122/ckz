import java.time.LocalDate;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;

public class Main {
    public static void main(String[] args) {
        LocalDate data = LocalDate.now();
        System.out.println(data);
        LocalTime czas = LocalTime.now();
        DateTimeFormatter forma = DateTimeFormatter.ofPattern("HH:mm");
        String Czas = czas.format(forma);
        System.out.println(Czas);
    }
}