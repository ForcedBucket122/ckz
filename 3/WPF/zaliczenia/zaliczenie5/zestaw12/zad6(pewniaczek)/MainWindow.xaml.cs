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

namespace zad6_pewniaczek_
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        private List<Product> availableProducts = new List<Product>
        {
            new Product { Id = 1, Name = "Książka H.Sienkiewicz 'Potop'", Price = 10m },
            new Product { Id = 2, Name = "Jabłko", Price = 2.5m },
            new Product { Id = 3, Name = "Cebula", Price = 2.5m }
        };

        // Koszyk (lista wybranych produktów)
        private List<Product> cart = new List<Product>();

        public MainWindow()
        {
            InitializeComponent();

            // Wypełnienie ListView produktami
            ProductsListView.ItemsSource = availableProducts;
        }

        // Obsługa przycisku "Dodaj do koszyka"
        private void AddToCartButton_Click(object sender, RoutedEventArgs e)
        {
            // Sprawdzenie, czy wybrano produkt
            if (ProductsListView.SelectedItem == null)
            {
                MessageBox.Show("Wybierz produkt z listy!", "Błąd", MessageBoxButton.OK, MessageBoxImage.Warning);
                return;
            }

            // Dodanie wybranego produktu do koszyka
            var selectedProduct = ProductsListView.SelectedItem as Product;
            cart.Add(selectedProduct);

            MessageBox.Show($"{selectedProduct.Name} został dodany do koszyka.", "Sukces", MessageBoxButton.OK, MessageBoxImage.Information);
        }

        // Obsługa przycisku "Zatwierdź"
        private void ConfirmButton_Click(object sender, RoutedEventArgs e)
        {
            // Sprawdzenie, czy koszyk jest pusty
            if (cart.Count == 0)
            {
                MessageBox.Show("Koszyk jest pusty. Dodaj produkty przed zatwierdzeniem.", "Błąd", MessageBoxButton.OK, MessageBoxImage.Warning);
                return;
            }

            // Obliczenie łącznej wartości koszyka
            decimal totalCost = 0;
            foreach (var product in cart)
            {
                totalCost += product.Price;
            }

            // Wyświetlenie zawartości koszyka
            string cartDetails = "Twoje zakupy:\n";
            foreach (var product in cart)
            {
                cartDetails += $"\n{product}";
            }
            cartDetails += $"\n\nWartość: {totalCost} zł";

            MessageBox.Show(cartDetails, "Zawartość koszyka", MessageBoxButton.OK, MessageBoxImage.Information);
        }
    }
}