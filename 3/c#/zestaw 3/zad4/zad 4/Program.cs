namespace zad_4
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Podaj liczbe: ");
            float a = float.Parse(Console.ReadLine());
            if (a > 0) 
            {
                Console.WriteLine("Liczba jest wieksza od zera");
            }
            else if (a < 0)
            {
                Console.WriteLine("Liczba jest mniejsza od zera");
            }
            else
            {
                Console.WriteLine("Liczba jest rowna zero");
            }
        }
    }
}
