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

namespace Zad1
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
        public void potwierdz(object sender, RoutedEventArgs e)
        {
            int liczba;
            String Symbol = symbol.Text;
            String Nazwa = nazwa.Text;
            String Magazyn = magazyn.Text;

            bool czyMozna = Int32.TryParse(liczbaSztuk.Text, out liczba);
            if (czyMozna)
            {
                MessageBox.Show("Wprowadzono dane: \n" + Symbol + " " + Nazwa + " " + liczba + " " + Magazyn);
                liczbaSztuk.BorderBrush=System.Windows.Media.Brushes.Green;
            }
            else
            {
                liczbaSztuk.BorderBrush = System.Windows.Media.Brushes.Red;
            }
        }
    }
}