using System;


/*
Zadanie 1. 
Napisz program, który stworzy tablice statyczną, posortuje ją algorytmem sortowania bąbelkowego, 
a następnie wypisze jej zawartość. Możesz wypisywać zawartość tablicy po każdnym przebiegu głównej pętli. 
*/
/*
class Program
{
    static void Main()
    {
        int[] array = { 5, 3, 8, 4, 2 };
        BubbleSort(array);
    }

    static void BubbleSort(int[] array)
    {
        int n = array.Length;
        for (int i = 0; i < n - 1; i++)
        {
            for (int j = 0; j < n - i - 1; j++)
            {
                if (array[j] > array[j + 1])
                {
                    int temp = array[j];
                    array[j] = array[j + 1];
                    array[j + 1] = temp;
                }
            }
            Console.WriteLine("Po przebiegu {0}: {1}", i + 1, string.Join(", ", array));
        }
    }
}
*/


/*
 Zadanie 2. 
Napisz program, który stworzy tablice statyczną, posortuje ją algorytmem sortowania przez wstawianie, 
a następnie wypisze jej zawartość. Możesz wypisywać zawartość tablicy po każdnym przebiegu głównej pętli. 
 */
/*
using System;

class Program
{
    static void Main()
    {
        int[] array = { 5, 3, 8, 4, 2 };
        InsertionSort(array);
    }

    static void InsertionSort(int[] array)
    {
        int n = array.Length;
        for (int i = 1; i < n; i++)
        {
            int key = array[i];
            int j = i - 1;
            while (j >= 0 && array[j] > key)
            {
                array[j + 1] = array[j];
                j--;
            }
            array[j + 1] = key;
            Console.WriteLine("Po przebiegu {0}: {1}", i, string.Join(", ", array));
        }
    }
}

 */

/*
 Zadanie 3. 
Napisz program, który stworzy tablice statyczną, posortuje ją algorytmem sortowania przez scalanie, a następnie wypisze jej zawartość. 
 */

/*
using System;

class Program
{
    static void Main()
    {
        int[] array = { 5, 3, 8, 4, 2 };
        MergeSort(array, 0, array.Length - 1);
        Console.WriteLine("Posortowana tablica: {0}", string.Join(", ", array));
    }

    static void MergeSort(int[] array, int left, int right)
    {
        if (left < right)
        {
            int middle = (left + right) / 2;
            MergeSort(array, left, middle);
            MergeSort(array, middle + 1, right);
            Merge(array, left, middle, right);
        }
    }

    static void Merge(int[] array, int left, int middle, int right)
    {
        int n1 = middle - left + 1;
        int n2 = right - middle;
        int[] L = new int[n1];
        int[] R = new int[n2];
        Array.Copy(array, left, L, 0, n1);
        Array.Copy(array, middle + 1, R, 0, n2);
        int i = 0, j = 0, k = left;
        while (i < n1 && j < n2)
        {
            if (L[i] <= R[j])
            {
                array[k] = L[i];
                i++;
            }
            else
            {
                array[k] = R[j];
                j++;
            }
            k++;
        }
        while (i < n1)
        {
            array[k] = L[i];
            i++;
            k++;
        }
        while (j < n2)
        {
            array[k] = R[j];
            j++;
            k++;
        }
    }
}




*/
/*
Zadanie 4. 
Napisz program, który stworzy tablice statyczną, 
posortuje ją algorytmem sortowania szybkiego, a
następnie wypisze jej zawartość. 
*/

/*
using System;

class Program
{
    static void Main()
    {
        int[] array = { 5, 3, 8, 4, 2 };
        QuickSort(array, 0, array.Length - 1);
        Console.WriteLine("Posortowana tablica: {0}", string.Join(", ", array));
    }

    static void QuickSort(int[] array, int low, int high)
    {
        if (low < high)
        {
            int pi = Partition(array, low, high);
            QuickSort(array, low, pi - 1);
            QuickSort(array, pi + 1, high);
        }
    }

    static int Partition(int[] array, int low, int high)
    {
        int pivot = array[high];
        int i = (low - 1);
        for (int j = low; j < high; j++)
        {
            if (array[j] < pivot)
            {
                i++;
                int temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
        }
        int temp1 = array[i + 1];
        array[i + 1] = array[high];
        array[high] = temp1;
        return i + 1;
    }
}
*/
/*
Zadanie 5. 
Napisz program, który stworzy tablice statyczną,
posortuje ją algorytmem sortowania kubełkowego,
a następnie wypisze jej zawartość.
*/

/*
using System;
using System.Collections.Generic;

class Program
{
    static void Main()
    {
        int[] array = { 5, 3, 8, 4, 2 };
        BucketSort(array);
        Console.WriteLine("Posortowana tablica: {0}", string.Join(", ", array));
    }

    static void BucketSort(int[] array)
    {
        int maxValue = array[0];
        for (int i = 1; i < array.Length; i++)
        {
            if (array[i] > maxValue)
                maxValue = array[i];
        }

        List<int>[] bucket = new List<int>[maxValue + 1];

        for (int i = 0; i < bucket.Length; i++)
        {
            bucket[i] = new List<int>();
        }

        for (int i = 0; i < array.Length; i++)
        {
            bucket[array[i]].Add(array[i]);
        }

        int k = 0;
        for (int i = 0; i < bucket.Length; i++)
        {
            for (int j = 0; j < bucket[i].Count; j++)
            {
                array[k++] = bucket[i][j];
            }
        }
    }
}
*/

/*Zadanie 6.
Napisz program którego zadaniem bedzie sortowanie kart. Poprzez karty rozumiemy znaki w postaci cyfr 2,3, .. 9
oraz litery J,Q,K,A. Program ma za zadanie wczytac ciąg znaków oznaczających karty trzymane w ręku oraz
wypisać ten ciąg w postaci posortowanej od najsłabszej do najsilniejszej karty.*/
/*
using System;
using System.Linq;

class Program
{
    static void Main()
    {
        char[] cards = { '2', 'K', '3', 'A', 'J', '9' };
        SortCards(cards);
        Console.WriteLine("Posortowane karty: {0}", string.Join(", ", cards));
    }

    static void SortCards(char[] cards)
    {
        char[] order = { '2', '3', '4', '5', '6', '7', '8', '9', 'J', 'Q', 'K', 'A' };
        Array.Sort(cards, (x, y) => Array.IndexOf(order, x).CompareTo(Array.IndexOf(order, y)));
    }
}
*/