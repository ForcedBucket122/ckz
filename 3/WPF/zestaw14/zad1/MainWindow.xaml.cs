using System.Diagnostics;
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
        public void Otworz(object sender, RoutedEventArgs e)
        {
            var selected = lista.SelectedItem as ListBoxItem;
            if (selected != null)
            {
                String link = (string)selected.Content;
                Process.Start(new ProcessStartInfo("https://" + link) { UseShellExecute = true });
            }
            else
            {
                MessageBox.Show("Zaznacz pole! ", "błąd",MessageBoxButton.OK ,MessageBoxImage.Warning);
            }

                //MessageBox.Show(link); 

                
        }
    }
}