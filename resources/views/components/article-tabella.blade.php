<tr>
                             <th scope="row">{{ ($article['id']) }}</th>
                                <td>{{ ($article['titolo']) }}</td>
                                <td>{{ ($article['data']) }}</td>
                             <td>{{ ($article['autore']) }}</td>
                             <td class="d-flex gap-3"><a href="{{ route('paginadettaglio', $article['id']) }}"><button class="btn btn-warning" >Leggi</button></a></td>
                        </tr>