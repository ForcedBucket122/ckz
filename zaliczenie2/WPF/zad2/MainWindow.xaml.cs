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

namespace zad2
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
        public void OnClickShow(object sender, RoutedEventArgs e)
        {
            String symbol = Symbol.Text;
            String nazwa = Nazwa.Text;
            String magazyn = Magazyn.Text;
            String liczba_sztuk = Liczba_sztuk.Text;

            MessageBox.Show("Wprowadzono dane:\n" + symbol +" "+ nazwa + " " + magazyn + " " + liczba_sztuk);
        }
    }
}