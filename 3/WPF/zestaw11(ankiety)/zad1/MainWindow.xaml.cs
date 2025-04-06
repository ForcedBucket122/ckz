using System.IO;
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
        public void formularz(object sender, RoutedEventArgs e)
        {
            var okno = new Ankieta();
            okno.ShowDialog();
        }
        public void Odczytaj(object sender, RoutedEventArgs e)
        {
            var dlg = new Microsoft.Win32.OpenFileDialog
            {
                Filter = "Pliki tekstowe (*.txt)|*.txt",
                Title = "Wybierz plik do odczytu"
            };
            if(dlg.ShowDialog() == true )
            {
                String tekst = File.ReadAllText(dlg.FileName);
                Odczyt.Text = tekst;
            }
        }
        public void Usun(object sender, RoutedEventArgs e)
        {
            var dlg = new Microsoft.Win32.OpenFileDialog
            {
                Filter = "Pliki tekstowe (*.txt)|*.txt",
                Title = "Wybierz plik do usuniecia"
            };
            if (dlg.ShowDialog() == true )
            {
                File.Delete(dlg.FileName);
            }
        }
    }
}