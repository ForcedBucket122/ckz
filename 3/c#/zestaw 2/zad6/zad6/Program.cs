namespace zad6
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int[] table = new int[5];
            for (int i = 0; i < table.Length; i++)
            {
                Console.Write("Wpisz liczbe: ");
                table[i] = int.Parse(Console.ReadLine());
            }
            Array.Reverse(table);
            for (int i = 0;i < table.Length;i++)
            {
                Console.WriteLine(table[i]);
            }
        }
    }
}
