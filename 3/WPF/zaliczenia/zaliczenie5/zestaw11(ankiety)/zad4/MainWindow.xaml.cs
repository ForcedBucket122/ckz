using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace zad4
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        public void walidacja(object sender,RoutedEventArgs e)
        {
            String pesel = peselIn.Text;
            int[] peselTab = new int[11];

            if(pesel.Length==11)
            {
                
                for(int i = 0; i < pesel.Length; i++)
                {
                    peselTab[i] = Int32.Parse(pesel[i].ToString());
                }
                
                int obliczonyPesel = 1 * peselTab[0] + 3 * peselTab[1] + 7 * peselTab[2] + 9 * peselTab[3] + 1 * peselTab[4] + 3 * peselTab[5] + 7 * peselTab[6] + 9 * peselTab[7] + 1 * peselTab[8] + 9 * peselTab[9];
                String obliczonyPeselString = obliczonyPesel.ToString();
                
                int koniecTab = obliczonyPeselString.Length - 1;
                if (Int32.Parse(obliczonyPeselString[koniecTab].ToString()) == peselTab[10])
                {
                    MessageBox.Show("Pesel jest poprawny ");
                }
                else
                {
                    MessageBox.Show("Pesel jest niepoprawny");
                }
            }
            else
            {
                MessageBox.Show("Pesel jest niepoprawny");
            }
        }
    }
}