namespace zad13
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //imie na odbicie lustrzane
            Console.Write("Wpisz imie: ");
            string imie=Console.ReadLine();
            char[] chars=imie.ToCharArray();
            //for (int i = chars.Length+1; i > 1; i--)
            //{
            //    Console.WriteLine(chars[i]);
            //}
            Array.Reverse(chars);
            for (int i = 0; i < chars.Length; i++) {
                Console.Write(chars[i]);
            }
        }
    }
}
