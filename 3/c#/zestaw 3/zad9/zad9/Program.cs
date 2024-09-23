namespace zad9
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int i = 1;
            int potega = 3;
            int wynik = potega;
            int k = 0;
            Console.Write("\nPodaj liczbe naturalna wieksza od 2: ");
            k = int.Parse(Console.ReadLine());
            if (k < 3)
            {
                Console.WriteLine("Liczba musi byc wieksza od 2!");
            }
            else
            {
            while(wynik<k)
                {
                    
                    wynik = (int)Math.Pow(wynik,i);
                    Console.WriteLine(Math.Pow(potega,i));
                    i++;
                }
            }
            
        }
    }
}
