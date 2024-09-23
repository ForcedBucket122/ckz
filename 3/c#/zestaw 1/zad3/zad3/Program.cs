namespace zad3
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Random random = new Random();
            int orzel = 0;
            int reszka = 0;
            for (int i = 0; i < 50; i++) {
                int los = random.Next(0, 2);

                if (los == 0)
                {
                    orzel++;
                }
                else if (los == 1) {
                    reszka++;
                }
            }
            Console.WriteLine("Wyniki losowania::\n-orzel: "+orzel+"\n-reszka: "+reszka);
        }
    }
}
