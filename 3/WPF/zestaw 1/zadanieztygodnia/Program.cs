using System;

class Program
{
    static void Main(string[] args)
    {
        // Inicjalizacja generatora liczb pseudolosowych
        Random random = new Random();

        // Tworzenie i wypełnianie tablicy 100 pseudolosowych liczb całkowitych
        int[] array = new int[100];
        for (int i = 0; i < array.Length; i++)
        {
            array[i] = random.Next(0, 1000); // Liczby z zakresu 0-999
        }

        // Wyświetlenie tablicy przed sortowaniem
        Console.WriteLine("Tablica przed sortowaniem:");
        Console.WriteLine(string.Join(", ", array));

        // Sortowanie tablicy metodą bąbelkową
        BubbleSort(array);

        // Wyświetlenie tablicy po sortowaniu
        Console.WriteLine("\nTablica po sortowaniu:");
        Console.WriteLine(string.Join(", ", array));
    }

    // Funkcja sortująca tablicę metodą bąbelkową
    static void BubbleSort(int[] array)
    {
        int n = array.Length;
        for (int i = 0; i < n - 1; i++)
        {
            for (int j = 0; j < n - i - 1; j++)
            {
                if (array[j] > array[j + 1])
                {
                    // Zamiana miejscami elementów bez użycia gotowej funkcji
                    int temp = array[j];
                    array[j] = array[j + 1];
                    array[j + 1] = temp;
                }
            }
        }
    }
}
