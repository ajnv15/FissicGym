Public Class versocio
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click

        Dim query As String = "select * from socios where numero = " + TextBox1.Text + " or nombre like '%" + TextBox1.Text + "%'"
        Dim rs As New mys()
        Dim dt As New DataTable
        dt = rs.datos(query)

        Label2.Text += "       " + dt.Rows.Item(0).Item("nombre")
        Label3.Text += "       " + dt.Rows.Item(0).Item("numero").ToString
        Label4.Text += "   " + dt.Rows.Item(0).Item("dia").ToString + "/" + dt.Rows.Item(0).Item("mes").ToString + "/" + dt.Rows.Item(0).Item("anio").ToString






    End Sub



    Private Sub TextBox2_keypressed(sender As Object, e As KeyPressEventArgs) Handles TextBox1.KeyPress


        If Asc(e.KeyChar) <> 8 Then
            If Asc(e.KeyChar) < 48 Or Asc(e.KeyChar) > 57 Then
                e.Handled = True
            End If
        End If
    End Sub

    Private Sub versocio_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub
End Class