namespace zad8
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Random rnd = new Random();
            int los = rnd.Next(0,101);
            int proby = 0;
            int trafiono = 0;
            int strzal = 0;
            while (trafiono==0) 
            {
                proby++;
                Console.Write("Zgadnij liczbe: ");
                strzal=int.Parse(Console.ReadLine());
                if (strzal == los)
                {
                    Console.WriteLine("Gratulacje!");
                    trafiono = 1;
                }
            }
        }
    }
}
