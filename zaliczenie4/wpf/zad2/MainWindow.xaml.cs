using System.Windows;
using System.Windows.Controls;

namespace WpfApp1
{
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void wybor(object sender, SelectionChangedEventArgs e)
        {
            if (opcje.SelectedItem is ComboBoxItem selectedItem)
            {
                MessageBox.Show($"Wybrano typ konfiguracji: {selectedItem.Content}", "Informacja");
            }
        }
    }
}
