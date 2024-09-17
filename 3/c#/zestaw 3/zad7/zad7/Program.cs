namespace zad7
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Podaj poczatek przedzialu: ");
            int a = int.Parse(Console.ReadLine()); 
            Console.Write("Podaj koniec przedzialu: ");
            int b = int.Parse(Console.ReadLine());
            Console.Write("Podaj liczbe: ");
            float n = float.Parse(Console.ReadLine());
            for (int i = a; i <= b; i++) 
            {
                if(i%n == 0)
                {
                    Console.WriteLine(i);
                }
            }
        }
    }
}
