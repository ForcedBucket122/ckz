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
        public void Click(object sender, RoutedEventArgs e)
        {
            var selectedItem = listBox.SelectedItem as ListBoxItem;
            string url = selectedItem.Tag.ToString();
            if(selectedItem != null)
            {
                Process.Start(new ProcessStartInfo("https://"+url) { UseShellExecute = true });
            }
            else
            {
                MessageBox.Show("Please select an item from the list.");
            }
        }

        
    }
}