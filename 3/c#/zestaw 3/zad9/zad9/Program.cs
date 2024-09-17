namespace zad9
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int potega = 3;
            int k = 999999;
            while (potega < k)
            {
                Console.WriteLine(potega);
                do
                {
                    Console.Write("\nPodaj liczbe naturalna wieksza od 2: ");
                    k = int.Parse(Console.ReadLine());
                    if (k < 3) 
                    {
                        Console.WriteLine("Liczba musi byc wieksza od 2!");
                    }
                } while (k<3);

                potega = potega * potega;
                //dokoncz
                
            }
        }
    }
}
