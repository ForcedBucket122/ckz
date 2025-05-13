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

namespace zad5
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

        private void dodaj_Click(object sender, RoutedEventArgs e)
        {
            if(comboBox.SelectedItem is ComboBoxItem selectedItem)
            {
                var checkbox = new CheckBox()
                {
                    Content = selectedItem.Content.ToString()
                };
                listBox.Items.Add(checkbox);
            }
        }

        private void usun_Click(object sender, RoutedEventArgs e)
        {
            var toRemove = new List<CheckBox>();
            foreach (var item in listBox.Items)
            {
                if(item is CheckBox checkbox && checkbox.IsChecked == true)
                {
                    toRemove.Add(checkbox);
                }
            }
            foreach (var checkbox in toRemove)
            {
                listBox.Items.Remove(checkbox);
            }

        }
    }
}