   M S B A M L   `   `   `  ����?  ;zad1, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullclr-namespace:zad1zad1  5   	       zad1.MainWindow   5   	   W SPresentationCore, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   $localclr-namespace:zad1     5   	     � Title$
  Test��5   	   $	��350��6   $	��600��6#   .��5	      �  � RowDefinitions 5
   
   �� 5      �� 5      �� 5      �� 5      �� 5      $��2* �6    � ColumnDefinitions 5   
   �� 5      �� 5      $��4* �6   .+�5   
   �� $��Rozmiar��6   $��0��6#   $��0��60   $��Center=�6@   $��Center=�6[   $��Verdana)�6x   $��13(�6�   ���#3E27236�   �� 5   
   -   5         ��Name$ rozmiar��5   n   $��0��6   $��1��6   $��Center=�6.    � Minimum$ 1Q�6I    � Maximum$	 100Q�6U    � Value$ 13Q�6c   6n   �� 5   
   $��Kolor��6   $��1��6!   $��0��6.   $��Center=�6>   $��Center=�6Y   $��Verdana)�6v   $��13(�6�   ���#3E27236�   �� 5   
   -   5         ��Name$ color��5   q   $��1��6   $��1��6    $��Center=�60   $
��Left=�6K   $��80��6f   $��26��6�   .@�5      �� $��Green��6   �� 5      $	��Red��6   �� 5      $
��Blue��6   5      �� 5    
   $��Tekst��6   $��2��6!   $��0��6.   $��Center=�6>   $��Center=�6Y   $��Verdana)�6v   $��13(�6�   ���#3E27236�   �� 5!   
   -   5         ��Name$
 text��5!   }   $��2��6   $��1��6   $��Center=�6/   $��26��6J   $	��300��6V   $
��Left=�6b   6}   �� 5#   
   $��
Długość��6   $��3��6#   $��0��60   $��Center=�6@   $��Center=�6[   $��Verdana)�6x   $��13(�6�   ���#3E27236�   �� 5$   
   $��3��6   $��1��6!   $��Center=�61   $
��Left=�6L   $	��150��6g   $��26��6s   ��6   �� 	 �� ElementName$	 wynik��
 �� Path$
 Text.Length��� 5&   
   -   5         ��Name$ wynik��5&   A   $��4��6   $��2��6!   $��10q�65   ��6P   �� $	 rozmiar��$
 Value���6�   �� $	 color��$

 Text���6�   �� $
	 text��$

 Text�5(      5)      