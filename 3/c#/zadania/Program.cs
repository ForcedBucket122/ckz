using System.Linq.Expressions;

namespace zadania
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //Console.WriteLine("Zadanie 1");
            //Console.WriteLine("Ile razy chcesz wprowadzic dane? ");
            //int d = int.Parse(Console.ReadLine());
            //for (int i = 0; i < d; i++)
            //{
            //    Console.WriteLine("Podaj prędkość w km/h: ");
            //    float k = float.Parse(Console.ReadLine());
            //    float w = (float)(k / 1.852);
            //    Console.WriteLine(w);
            //}



            //Console.WriteLine("\nZadanie 2");
            //string a = "Dzisiaj ";
            //string b = "programujemy ";
            //string c = "dane";
            //Console.WriteLine(a + b + c);



            //Console.WriteLine("\nZadanie 3");
            //Random rnd = new Random();
            //int orzel=0;
            //int reszka=0;
            //for (int i = 0; i < 50; i++)
            //{
            //    int r = rnd.Next(0, 3);
            //    if(r == 1)
            //    {
            //        orzel += r;
            //    }
            //    else if(r == 2)
            //    {
            //        reszka += r;
            //    }
            //}
            //Console.WriteLine("\norzel: "+orzel);
            //Console.WriteLine("reszka: "+reszka);



            //Console.WriteLine("\nZadanie 4");
            //Console.WriteLine("\nPodaj kwotę w złotówkach: ");
            //float zl = float.Parse(Console.ReadLine());
            //float euro = (float)(Math.Round(zl / 4.2865,2));
            //float dolar = (float)(Math.Round(zl / 3.8887,2));
            //float funt = (float)(Math.Round(zl / 5.0764,2));
            //Console.WriteLine("euro: " + euro);
            //Console.WriteLine("dolar: " + dolar);
            //Console.WriteLine("funt: "+  funt);



            //Console.WriteLine("\nZadanie 5");
            //sortowanie



            Console.WriteLine("\nZadanie 6");
            Random los = new Random();
            int[] table = [];
            for (int i = 0; i < 8; i++) 
            {
                int r = los.Next(0, 100);    
                table = new int[r];
            }
            Console.WriteLine(table.Length);
            //dokoncz

        }
    }
}
