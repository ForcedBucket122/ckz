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

namespace zad1
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
        public void wynik(object sender, RoutedEventArgs e)
        {
            
            string produkt = Produkt.Text;
            string nazwa = Nazwa.Text;
            int lSztuk;
            string magazyn = Magazyn.Text;
            bool czyMozna = Int32.TryParse(LiczbaSztuk.Text, out lSztuk);
            if (czyMozna)
            {
                LiczbaSztuk.BorderBrush = System.Windows.Media.Brushes.Green;
                MessageBox.Show("Podane dane: \n" + produkt + " " + nazwa + " " + lSztuk + " " + magazyn);
            }
            else
            {
                LiczbaSztuk.BorderBrush = System.Windows.Media.Brushes.Red;
            }
            
            
            
            
            
        }
    }
}