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
        // Obsługa kliknięcia przycisku "Zatwierdź"
        private void Button_Click(object sender, RoutedEventArgs e)
        {
            // Sprawdzenie, czy wybrano imię
            if (NamesListBox.SelectedItem != null)
            {
                var selectedItem = NamesListBox.SelectedItem as ListBoxItem;
                string selectedName = selectedItem.Content.ToString();
                MessageBox.Show(selectedName, "Opis", MessageBoxButton.OK, MessageBoxImage.Information);
            }
            else
            {
                MessageBox.Show("Wybierz imię z listy!", "Błąd", MessageBoxButton.OK, MessageBoxImage.Exclamation);
            }
        }
    }
}